<?php
// This class was automatically generated by build task
// You can change it manually, but it will be overwritten on next build

use Codeception\Maybe;
use Codeception\Module\Unit;
use Codeception\Module\CodeHelper;
use Codeception\Module\EmulateModuleHelper;

/**
 * Inherited methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void amTesting($method)
 * @method void amTestingMethod($method)
 * @method void testMethod($signature)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($role)
*/

class CodeGuy extends \Codeception\AbstractGuy
{
    
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Registers a class/method which will be tested.
     * When you run 'execute' this method will be invoked.
     * Please, note that it also updates the feature section of the scenario.
     *
     * For non-static methods:
     *
     * ``` php
     * <?php
     * $I->testMethod('ClassName.MethodName'); // I will need ClassName instance for this
     * ```
     *
     * For static methods:
     *
     * ``` php
     * <?php
     * $I->testMethod('ClassName::MethodName');
     * ```
     *
     * @param $signature
     * @see Unit::testMethod()
     */
    public function testMethod($signature) {
        $this->scenario->action('testMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Adds a stub to the internal registry.
     * Use this command if you need to convert this stub to a mock.
     * Without adding the stub to registry you can't trace it's method invocations.
     *
     * @param $instance
     * @see Unit::haveFakeClass()
     */
    public function haveFakeClass($instance) {
        $this->scenario->action('haveFakeClass', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Alias for haveFakeClass
     *
     * @alias haveFakeClass
     * @param $instance
     * @see Unit::haveStub()
     */
    public function haveStub($instance) {
        $this->scenario->action('haveStub', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Execute The tested method on an object (a stub can be passed).
     * First argument is an object, the rest are supposed to be parameters passed to method.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->wantTo('authenticate user');
     * $I->testMethod('User.authenticate');
     * $user = new User();
     * $I->executeTestedMethodOn($user, 'Davert','qwerty');
     * // This line $user->authenticate('Davert','qwerty') was called.
     * $I->seeResultEquals(true);
     * ?>
     * ```
     *
     * For static methods use 'executeTestedMethodWith'.
     *
     * @param $object
     * @see Unit::executeTestedMethodOn()
     */
    public function executeTestedMethodOn($object) {
        $this->scenario->action('executeTestedMethodOn', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Executes the tested static method with parameters provided.
     *
     * ```
     * <?php
     * $I->testMethod('User::validateName');
     * $I->executeTestedMethodWith('davert',true);
     * // This line User::validate('davert', true); was called
     * ?>
     * ```
     * For a non-static method use 'executeTestedMethodOn'
     *
     * @param $params
     * @throws \Codeception\Exception\Module
     * @see Unit::executeTestedMethodWith()
     */
    public function executeTestedMethodWith($params) {
        $this->scenario->action('executeTestedMethodWith', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Executes the method which is being tested.
     * If the method is not static, the class instance should be provided.
     *
     * If a method is static 'executeTestedWith' will be called.
     * If a method is not static 'executeTestedOn' will be called.
     * See those methods for the full reference
     *
     * @throws \InvalidArgumentException
     * @see Unit::executeTestedMethod()
     */
    public function executeTestedMethod() {
        $this->scenario->action('executeTestedMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Executes a code block. The result of execution will be stored.
     * Parameter should be a valid Closure. The returned value can be checked with seeResult actions.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $user = new User();
     * $I->execute(function() use ($user) {
     *      $user->setName('Davert');
     *      return $user->getName();
     * });
     * $I->seeResultEquals('Davert');
     * ?>
     * ```
     *
     * You can use native PHPUnit asserts in the executed code. 
     * These can be either static methods of the 'PHPUnit_Framework_assert' class,
     * or functions taken from 'PHPUnit/Framework/Assert/Functions.php'. They start with 'assert_' prefix.
     * You should manually include this file, as these functions may conflict with functions in your code.
     *
     * Example:
     *
     * ``` php
     * <?php
     * require_once 'PHPUnit/Framework/Assert/Functions.php';
     *
     * $user = new User();
     * $I->execute(function() use ($user) {
     *      $user->setName('Davert');
     *      assertEquals('Davert', $user->getName());
     * });
     * ```
     *
     * @param \Closure $code
     * @see Unit::execute()
     */
    public function execute($code) {
        $this->scenario->action('execute', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Executes a method of an object.
     * Additional parameters can be provided.
     *
     * Example:
     *
     * ``` php
     * <?php
     * // to execute $user->getName()
     * $I->executeMethod($user,'getName');
     *
     * // to execute $user->setName('davert');
     * $I->executeMethod($user,'setName', 'davert');
     *
     * // or more parameters
     * $I->executeMethod($user, 'setNameAndAge', 'davert', '30');
     *
     * ?>
     * ```
     *
     * @param $object
     * @param $method
     * @see Unit::executeMethod()
     */
    public function executeMethod($object, $method) {
        $this->scenario->action('executeMethod', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Updates multiple properties of the selected object.
     * Can update even private and protected properties.
     * 
     * Properties to be updated and their values are passed in the second parameter as an array:
     * array('theProprrty'     => 'some value',
     *      ('anotherProperty' => 'another value')
     *
     * @param $obj
     * @param array $values
     * @see Unit::changeProperties()
     */
    public function changeProperties($obj, $values = null) {
        $this->scenario->action('changeProperties', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Updates a single property of the selected object
     * Can update even private and protected properties.
     *
     * @param $obj
     * @param $property
     * @param $value
     * @see Unit::changeProperty()
     */
    public function changeProperty($obj, $property, $value) {
        $this->scenario->action('changeProperty', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     *
     * @see Unit::seeExceptionThrown()
     */
    public function seeExceptionThrown($classname, $message = null) {
        $this->scenario->assertion('seeExceptionThrown', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that a method of a stub was invoked after the last execution.
     * Requires a stub as the first parameter, the method name as the second.
     * Optionally pass the arguments which are expected by the executed method.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->testMethod('UserService.create');
     * $I->haveStub($user = Stub::make('Model\User'));*
     * $service = new UserService($user);
     * $I->executeTestedMethodOn($service);
     * // we expect $user->save was invoked.
     * $I->seeMethodInvoked($user, 'save');
     * ?>
     * ```
     *
     * This method dynamically creates a mock from a stub.
     *
     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param array $params
     * @see Unit::seeMethodInvoked()
     */
    public function seeMethodInvoked($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodInvoked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that a method of a stub was invoked *only once* after the last execution.
     * Requires a stub as the first parameter, a method name as the second.
     * Optionally pass the arguments which are expected by the executed method.
     *
     * Look for 'seeMethodInvoked' to see the example.

     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param array $params
     * @see Unit::seeMethodInvokedOnce()
     */
    public function seeMethodInvokedOnce($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodInvokedOnce', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that a method of a stub *was not invoked* after the last execution.
     * Requires a stub as the first parameter, a method name as the second.
     * Optionally pass the arguments which are expected by the executed method.

     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param array $params
     * @see Unit::seeMethodNotInvoked()
     */
    public function seeMethodNotInvoked($mock, $method, $params = null) {
        $this->scenario->assertion('seeMethodNotInvoked', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that a method of a stub was invoked *multiple times* after the last execution.
     * Requires a stub as the first parameter, a method name as the second and the expected number of executions.
     * Optionally pass the arguments which are expected by the executed method.
     *
     * Look for 'seeMethodInvoked' to see the example.

     * @magic
     * @see createMocks
     * @param $mock
     * @param $method
     * @param $times
     * @param array $params
     * @see Unit::seeMethodInvokedMultipleTimes()
     */
    public function seeMethodInvokedMultipleTimes($mock, $method, $times, $params = null) {
        $this->scenario->assertion('seeMethodInvokedMultipleTimes', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Asserts that the last result from the tested method is equal to value
     *
     * @param $value
     * @see Unit::seeResultEquals()
     */
    public function seeResultEquals($value) {
        $this->scenario->assertion('seeResultEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     *
     * @see Unit::seeResultContains()
     */
    public function seeResultContains($value) {
        $this->scenario->assertion('seeResultContains', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that the result of the last execution doesn't contain a value.
     *
     * @param $value
     * @see Unit::dontSeeResultContains()
     */
    public function dontSeeResultContains($value) {
        $this->scenario->action('dontSeeResultContains', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that the result of the last execution is not equal to a value.
     *
     * @param $value
     * @see Unit::dontSeeResultEquals()
     */
    public function dontSeeResultEquals($value) {
        $this->scenario->action('dontSeeResultEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that the result of the last execution is empty.
     * @see Unit::seeEmptyResult()
     */
    public function seeEmptyResult() {
        $this->scenario->assertion('seeEmptyResult', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that the result of the last execution is a specific type.
     * Either 'int', 'bool', 'string', 'array', 'float', 'null', 'resource', 'scalar' can be passed for simple types.
     * Otherwise the parameter must be a class and the result must be an instance of that class.
     *
     * Example:
     *
     * ``` php
     * <?php
     * $I->execute(function() { return new User });
     * $I->seeResultIs('User');
     * ?>
     * ```
     *
     * @param $type
     * @see Unit::seeResultIs()
     */
    public function seeResultIs($type) {
        $this->scenario->assertion('seeResultIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that the property of an object equals the value provided.
     * Can check even protected or private properties.
     *
     * Bear in mind that testing non-public properties is not a good practice.
     * Use it only if you have no other way to test it.
     *
     * @param $object
     * @param $property
     * @param $value
     * @see Unit::seePropertyEquals()
     */
    public function seePropertyEquals($object, $property, $value) {
        $this->scenario->assertion('seePropertyEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Checks that the property is a passed type.
     * Either 'int', 'bool', 'string', 'array', 'float', 'null', 'resource', 'scalar' can be passed for simple types.
     * Otherwise the parameter must be a class and the property must be an instance of that class.
     *
     * Bear in mind that testing non-public properties is not a good practice.
     * Use it only if you have no other way to test it.
     *
     * @param $object
     * @param $property
     * @param $type
     * @see Unit::seePropertyIs()
     */
    public function seePropertyIs($object, $property, $type) {
        $this->scenario->assertion('seePropertyIs', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Executes a method and checks that the result is equal to a value.
     * Good for testing values taken from getters.
     *
     * Example:
     *
     * ``` php
     * $I->testMethod('User.setName');
     * $user = new User();
     * $I->executeTestedMethodOn($user, 'davert');
     * $I->seeMethodReturns($user,'getName','davert');
     *
     * ```
     *     *
     * @param $object
     * @param $method
     * @param $value
     * @param array $params
     * @see Unit::seeMethodReturns()
     */
    public function seeMethodReturns($object, $method, $value, $params = null) {
        $this->scenario->assertion('seeMethodReturns', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     * Executes a method and checks that the result is NOT equal to a value.
     * Good for testing values taken from getters.
     *
     * Look for 'seeMethodReturns' for example.
     *
     * @param $object
     * @param $method
     * @param $value
     * @param array $params
     * @see Unit::seeMethodNotReturns()
     */
    public function seeMethodNotReturns($object, $method, $value, $params = null) {
        $this->scenario->assertion('seeMethodNotReturns', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     *
     * @see EmulateModuleHelper::seeEquals()
     */
    public function seeEquals($expected, $actual) {
        $this->scenario->assertion('seeEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     *
     *
     * @see EmulateModuleHelper::seeFeaturesEquals()
     */
    public function seeFeaturesEquals($expected) {
        $this->scenario->assertion('seeFeaturesEquals', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

