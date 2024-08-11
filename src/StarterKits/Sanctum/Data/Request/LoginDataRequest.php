<?php

declare(strict_types=1);

namespace XtendPackages\RESTPresenter\StarterKits\Sanctum\Data\Request;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Rule;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Validation\ValidationContext;

final class LoginDataRequest extends Data
{
    public function __construct(
        #[Email(Email::RfcValidation)]
        public string $email,
        #[Rule(['required'])]
        public string $password,
    ) {}

    /**
     * @return array<string, array<mixed>>
     */
    public static function rules(ValidationContext $context): array
    {
        return type(config('rest-presenter.auth.login_data_request_rules'))->asArray();
    }
}
