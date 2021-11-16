<?

namespace Hexlet\Validator;

class RequiredValidator implements ValidatorInterface
{
    public function isValid($validate): bool
    {
        return $validate !== null;
    }
}
