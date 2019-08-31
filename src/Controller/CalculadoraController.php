<?php


namespace App\Controller;
use App\Controller\Calculadora;
use phpDocumentor\Reflection\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CalculadoraController extends AbstractController
{
    /**
     * @Route("/calculadora")
     */
      public function gerarResultado(Request $request){
          $calculadora = new Calculadora();
          dump($request->request->all());
          $resultado =0;
          if($request->request->all())
          {
              $resultado = $calculadora->calcular();
          }
          return $this->render('calculadora.html.twig', [
              'resultado' => $resultado,
          ]);
      }

}