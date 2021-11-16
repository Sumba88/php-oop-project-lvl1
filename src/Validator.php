<?

namespace Hexlet\Validator;

class Validator
{
    public function string(): StringValidator
    {
        return new StringValidator();
    }
}
