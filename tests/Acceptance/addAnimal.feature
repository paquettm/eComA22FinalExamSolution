Feature: AddAnimal
  In order to add an animal
  As a user
  I need to be loggd in and enter all the details

  Scenario: Try adding "cutiepie"
    Given I am logged in
    And I am on "/Vet/index"
    And I click "details"
    And I click "Add a new animal"
    When I input "cutiepie" in "name"
    And I input "2022-01-01" in "dob"
    And I click "Add new pet"
    Then I see "cutiepie"