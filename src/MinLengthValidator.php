<?

namespace Hexlet\Validator;

class MinLengthValidator implements ValidatorInterface
{

    protected $length;
    
    function __construct(string $length)
    {
        $this->length = $length;
    }

    public function isValid($validate): bool
    {
        return strlen($validate) >= $this->length;
    }
}
