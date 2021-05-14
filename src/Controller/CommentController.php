<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class CommentController extends AbstractController {
        /**
         *  @Route("/")
         */
        public function index() {

            $names= ['Pierre', 'Brionna'];

            return $this->render('comments/index.html.twig', array ('names' => $names));
        }
      
    }