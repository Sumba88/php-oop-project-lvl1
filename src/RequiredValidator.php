<?

namespace Hexlet\Validator;

class RequiredValidator implements ValidatorInterface
{
    
    function __construct()
    {
        
    }

    public function isValid($validate): bool
    {
        return $validate !== null;
    }
}
