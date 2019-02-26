<?php
/**
 * Created by PhpStorm.
 * User: stephane.mestric
 * Date: 2/19/2019
 * Time: 12:00 PM
 */
namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class AdvertController extends Controller
{
<<<<<<< HEAD
        public function indexAction($page){
            $listAdverts = array(
                array(
                    'title'   => 'Recherche développpeur Symfony',
                    'id'      => 1,
                    'author'  => 'Alexandre',
                    'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                    'date'    => new \Datetime()),
                array(
                    'title'   => 'Mission de webmaster',
                    'id'      => 2,
                    'author'  => 'Hugo',
                    'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                    'date'    => new \Datetime()),
                array(
                    'title'   => 'Offre de stage webdesigner',
                    'id'      => 3,
                    'author'  => 'Mathieu',
                    'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                    'date'    => new \Datetime())
            );

            // Et modifiez le 2nd argument pour injecter notre liste
            return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
                'listAdverts' => $listAdverts
            ));
    }

    public function viewAction($id)
    {
        $advert = array(
            'title' => 'Recherche développpeur Symfony2',
            'id' => $id,
            'author' => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
            'date' => new \Datetime()
        );

        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'advert' => $advert
        ));
=======
    public function indexAction($page){
        if($page < 1){
            throw new NotFoundHttpException('Page "'.$page.'" inexistante');
        }

        return $this->render('OCPlatformBundle:Advert:index.html.twig');
    }

    public function viewAction($id){
        return $this->render('OCPlatformBundle:Advert:view.html.twig', array('id' => $id));
>>>>>>> 9b995f417533e57db7e9ac037b9e17f48568fb50
    }

    public function addAction(Request $request){
        if($request->isMethod('POST')){
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => 5, 'nom' => 'Boudindon'));
        }
        return $this->render('OCPlatformBundle:Advert:add.html.twig', array('nom' => 'Boudindon'));
    }

<<<<<<< HEAD
    public function editAction($id, Request $request)
    {
        $advert = array(
            'title' => 'Recherche développpeur Symfony',
            'id' => $id,
            'author' => 'Alexandre',
            'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
            'date' => new \Datetime()
        );
        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert
        ));
=======
    public function editAction($id, Request $request) {
        if($request->isMethod('POST')){
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');


            return $this->redirectToRoute('oc_platform_view', array('id' => 5));
        }
        return $this->render('OCPlatformBundle:Advert:edit.html.twig');
>>>>>>> 9b995f417533e57db7e9ac037b9e17f48568fb50
    }

    public function deleteAction(){
        return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }
<<<<<<< HEAD

    public function menuAction($limit)
    {
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );
        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }
=======
>>>>>>> 9b995f417533e57db7e9ac037b9e17f48568fb50
}