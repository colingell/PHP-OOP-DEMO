<?php // PHP tag <?php

/*
This is a simple script to demonstrate usage of Object Orientated Programming (OOP)

This has been created by Colin Gell in order to demonstrate clean and well structured code
*/

class Assurant // Class creation
{
  protected $companyName; //protected variable
  protected $budget; //protected variable
 
  // Methods

  // getters - These are necessary in strict OOP languages, this is a demonstration of these in practice
  public function getCompany() // getter 
  {
    return $this->companyName; // return value
  }
 
  // setters - These are necessary in strict OOP languages, this is a demonstration of these in practice 
  public function setCompany($companyName) //setter
  {
    $this->companyName = $companyName; // sets the value of $companyName 
  }
 
  protected function callToProtectedVars() // calls to protected variables
  {
    return $this->companyName . ' has a budget of ' . $this->budget;
  }
}

/*
####################### INHERITANCE ###############################

The below shows how the class Department inherits attributes from the parent Assurant class

*/

class Department extends Assurant // inheritants Assurant class into Department class
{
  private $departmentName;
  private $saved;
 
  public function getBudget() //getter
  {
    return $this->budget;
  }
 
  public function setBudget($budget) // setter
  {
    $this->budget = $budget; // Assigns a value
  }
 
  public function getDepartment()
  {
    return $this->departmentName;
  }
 
  public function setDepartment($departmentName)
  {
    $this->departmentName = $departmentName;
  }
 
  public function getSaved()
  {
    return $this->saved;
  }
 
  public function setSaved($saved)
  {
    $this->saved = $saved;
  }
  
  private function callToPrivateVars() // calls to private variables
  {
    return ' and the department ' . $this->getDepartment() . ' has saved ' . $this->getSaved() . ' of this amount';
  }
 
  public function getScript()
  {
    return $this->callToProtectedVars() . $this->callToPrivateVars();
  }
  
}


// Creates a new instance of a class and 
$department = new Department();
 
// Call to setters
$department->setCompany('Assurant Solutions');
$department->setBudget(1000000);
$department->setDepartment('IT');
$department->setSaved(50000);

// Call to getters 
echo $department->getCompany() . '<br />'; // echoes 'Assurant' from main class
echo $department->getBudget() . '<br />'; // echoes '1000000' from main class
echo $department->getDepartment() . '<br />'; // echoes 'IT'
echo $department->getSaved() . '<br />'; // echoes '750000'

// Call to script text
echo $department->getScript() . '<br />'; // echoes 'Assurant has a budget of 1000000'
//echo $department->callToPrivateVars(); // cannot be called outside class - 'Fatal Error'
?><!-- PHP end tag-->
