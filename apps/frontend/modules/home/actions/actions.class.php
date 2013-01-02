<?php

/**
 * home actions.
 *
 * @package    propel
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

  public function executeIndex(sfWebRequest $request)
  {

    $this->problems = ProblemPeer::getActiveProblems();

    $this->solutions = SolutionPeer::getAllSolutions();

  }

  public function executeProblem(sfWebRequest $request)
  {
    $this->form = new ProblemForm();

    if($request->isMethod('post')) {
      $problem = new Problem();

      $this->saveProblemForm($request, $problem);

      $id = $problem->getId();

      $this->redirect("@enter_solution?id=$id");
    }
  }

  public function executeSolution(sfWebRequest $request)
  {
    $problemId = $request->getParameter('id');
    $this->problem = ProblemPeer::retrieveByPK($problemId);

    if($request->isMethod('post')) {
      $this->saveSolutionStep($request, $problemId);
    }

    $this->solutions = SolutionPeer::getSolutionToProblem($problemId);

    $this->form = new SolutionForm();
  }

  public function saveProblemForm($request, &$problem)
  {
    $title       = $request->getParameter('title');
    $description = $request->getParameter('description');

    $problem = new Problem();

    $problem->setTitle($title);
    $problem->setDescription($description);
    $problem->save();
  }

  public function saveSolutionStep($request, $problemId) 
  {
    $instruction = $request->getParameter('instruction');
    $step        = $request->getParameter('step');

    $solution = new Solution();

    $solution->setInstruction($instruction);
    $solution->setStep($step);
    $solution->setProblemId($problemId);
    $solution->save();
  }
}
