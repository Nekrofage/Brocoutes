<?php

namespace Brocoutes\BrocanteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Brocoutes\BrocanteBundle\Entity\Manifestation;
use Brocoutes\BrocanteBundle\Form\ManifestationType;

/**
 * Manifestation controller.
 *
 */
class ManifestationController extends Controller
{

    /**
     * Lists all Manifestation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BrocoutesBrocanteBundle:Manifestation')->findAll();

        return $this->render('BrocoutesBrocanteBundle:Manifestation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Manifestation entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Manifestation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect(
                    $this->generateUrl('manifestation_show', 
                                array(
                                    'id' => $entity->getId(),
                                    'nom' => $entity->getNom(),
                                    'lieu' => $entity->getLieu()
                                    )
                                )
                            );
        }

        return $this->render('BrocoutesBrocanteBundle:Manifestation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Manifestation entity.
    *
    * @param Manifestation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Manifestation $entity)
    {
        $form = $this->createForm(new ManifestationType(), $entity, array(
            'action' => $this->generateUrl('manifestation_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Manifestation entity.
     *
     */
    public function newAction()
    {
        $entity = new Manifestation();
        $form   = $this->createCreateForm($entity);

        return $this->render('BrocoutesBrocanteBundle:Manifestation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Compute an itineraire.
     *
     */
    public function itineraireAction()
    {

        return $this->render('BrocoutesBrocanteBundle:Manifestation:itineraire.html.twig');
    }

    /**
     * Compute an trajet.
     *
     */
    public function trajetAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BrocoutesBrocanteBundle:Manifestation')->findAll();

        return $this->render('BrocoutesBrocanteBundle:Manifestation:trajet.html.twig', array(
            'entities' => $entities,
        ));

    }







    /**
     * Finds and displays a Manifestation entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BrocoutesBrocanteBundle:Manifestation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manifestation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BrocoutesBrocanteBundle:Manifestation:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Manifestation entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BrocoutesBrocanteBundle:Manifestation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manifestation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BrocoutesBrocanteBundle:Manifestation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Manifestation entity.
    *
    * @param Manifestation $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Manifestation $entity)
    {
        $form = $this->createForm(new ManifestationType(), $entity, array(
            'action' => $this->generateUrl('manifestation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Manifestation entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BrocoutesBrocanteBundle:Manifestation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Manifestation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        
        $editForm->bind($request);
        $em->persist($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('manifestation_edit', array('id' => $id)));


        /*
        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('manifestation_edit', array('id' => $id)));
        }
        return $this->render('BrocoutesBrocanteBundle:Manifestation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));*/
    }
    /**
     * Deletes a Manifestation entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BrocoutesBrocanteBundle:Manifestation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Manifestation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('manifestation'));
    }

    /**
     * Creates a form to delete a Manifestation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('manifestation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
