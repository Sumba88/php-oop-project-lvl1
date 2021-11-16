<?

namespace Hexlet\Validator;

class StringValidator extends ValidatorAbstract
{

    public function required()
    {
        $this->addValidator(new RequiredValidator());
        return $this;
    }

    public function contains($needle)
    {
        $this->addValidator(new ContainsValidator($needle));
        return $this;
    }
    
    public function minLength($needle)
    {
        $this->addValidator(new MinLengthValidator($needle));
        return $this;
    }
}
