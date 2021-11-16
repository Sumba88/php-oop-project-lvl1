<?

namespace Hexlet\Validator;

abstract class ValidatorAbstract
{
    
    public $validators = [

    ];

    public function addValidator(ValidatorInterface $validator)
    {
        $this->validators[get_class($validator)] = $validator;
    }

    public function isValid(): bool
    {
        foreach ($this->validators as $validator) {
            if(!$validator->isValid()){
                return false;
            }
        }
        return true;
    }
}
