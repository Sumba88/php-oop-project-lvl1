<?

namespace Hexlet\Validator;

class StringValidator implements ValidatorInterface
{
    
    function __construct()
    {
        
    }

    public function isValid($validate): bool
    {
        return is_string($validate);
    }
}
