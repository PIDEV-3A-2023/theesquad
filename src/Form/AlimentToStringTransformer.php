<?php
use App\Entity\Aliment;
use Symfony\Component\Form\DataTransformerInterface;

class AlimentToStringTransformer implements DataTransformerInterface
{
/**
* Transforms an Aliment object to a string.
*
* @param  Aliment|null $aliment
* @return string
*/
public function transform($aliment)
{
if (null === $aliment) {
return '';
}

return $aliment->getNom();
}

/**
* Transforms a string to an Aliment object.
*
* @param  string $nom
* @return Aliment|null
*/
public function reverseTransform($nom)
{
if (!$nom) {
return null;
}

$aliment = new Aliment();
$aliment->setNom($nom);

return $aliment;
}
}