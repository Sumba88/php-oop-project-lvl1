<?

namespace Hexlet\Validator;

class Validator
{
    
    public $validators = [

    ];

    public function string()
    {
        $object = new self();
        $object->addValidator(new StringValidator());
        return $object;
    }

    public function require()
    {
        $this->addValidator(new RequiredValidator());
        return $this;
    }

    
    public function contains($needle)
    {
        $this->addValidator(new ContainsValidator($needle));
        return $this;
    }

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
