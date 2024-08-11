<?php

declare(strict_types=1);

namespace XtendPackages\RESTPresenter\Resources\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use XtendPackages\RESTPresenter\Models\User;
use XtendPackages\RESTPresenter\Resources\ResourceController;

final class UserResourceController extends ResourceController
{
    public static bool $isAuthenticated = true;

    /**
     * @return Collection<int, Data>
     */
    public function index(Request $request): Collection
    {
        /** @var Collection<int, User> $users */
        $users = $this->getModelQueryInstance()->get();

        return $users->map(
            fn ($user): Data => $this->present($request, $user),
        );
    }

    public function show(Request $request, User $user): Data
    {
        return $this->present($request, $user);
    }

    /**
     * @return array<int, string>
     */
    public function filters(): array
    {
        $filters = config('rest-presenter.resources.user.filters', [
            'email_verified_at' => Filters\UserEmailVerified::class,
        ]);

        assert(is_array($filters));

        return $filters;
    }

    /**
     * @return array<int, string>
     */
    public function presenters(): array
    {
        $presenters = config('rest-presenter.resources.user.presenters', [
            'profile' => Presenters\Profile::class,
            'user' => config('rest-presenter.resources.user.model'),
        ]);

        assert(is_array($presenters));

        return $presenters;
    }
}
