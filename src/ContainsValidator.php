<?

namespace Hexlet\Validator;

class ContainsValidator implements ValidatorInterface
{

    protected $needle;
    
    function __construct(string $needle)
    {
        $this->needle = $needle;
    }

    public function isValid($validate): bool
    {
        return strpos($validate, $this->needle) !== false;
    }
}
