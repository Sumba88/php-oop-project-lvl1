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

    public function isValid($validate): bool
    {
        foreach ($this->validators as $validator) {
            if(!$validator->isValid($validate)){
                return false;
            }
        }
        return true;
    }
}
