@editor @editor_atto @atto @atto_matrix @_bug_phantomjs
Feature: Atto matrix editor
  To teach maths to students, I need to write matricess

  @javascript
  Scenario: Create a matrix
    Given I log in as "admin"
    When I follow "Profile" in the user menu
    And I follow "Edit profile"
    And I set the field "Description" to "<p>Matrix test</p>"
    # Set field on the bottom of page, so matrix editor dialogue is visible.
    And I expand all fieldsets
    And I set the field "Picture description" to "Test"
    And I select the text in the "Description" Atto editor
    And I click on "Show more buttons" "button"
    And I click on "Matrix editor" "button"
    And I set the field "Edit matrix using" to " 2x2 matrix"
    And I click on "\begin{smallmatrix} a & b \\ c & d \end{smallmatrix}" "button"
    And I click on "Save matrix" "button"
    And I click on "Update profile" "button"
    And I follow "Profile" in the user menu
    Then "\begin{smallmatrix} a & b \\ c & d \end{smallmatrix}" "text" should exist

  @javascript
  Scenario: Edit a matrix
    Given I log in as "admin"
    When I follow "Profile" in the user menu
    And I follow "Edit profile"
    And I set the field "Description" to "<p>\( \begin{smallmatrix} a & b \\ c & d \end{smallmatrix} \)</p>"
    # Set field on the bottom of page, so matrix editor dialogue is visible.
    And I expand all fieldsets
    And I set the field "Picture description" to "Test"
    And I select the text in the "Description" Atto editor
    And I click on "Show more buttons" "button"
    And I click on "Matrix editor" "button"
    Then the field "Edit matrix using" matches value " \begin{smallmatrix} a & b \\ c & d \end{smallmatrix} "
    And I click on "Save matrix" "button"
    And the field "Description" matches value "<p>\( \begin{smallmatrix} a & b \\ c & d \end{smallmatrix} \)</p>"
