Feature: Security

  @security @authentication
  Scenario: I can authenticate using API key and access restricted area
    When I add "Content-Type" header equal to "application/json"
    When I send a POST request to "/login" with body:
    """
    {
        "username": "user1@test.com",
        "password": "somepassword"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the response should contain "apiKey"
    And the response should contain "username"
    And the response should contain "firstName"
    And the response should contain "lastName"
    And the response should contain "roles"
    And I save my authentication token

    # This has to be done in the same scenario as the authentication token is saved in memory
    Given I add my saved authentication token to the header
    When I send a GET request to "/secured_area"
    Then the response status code should be 202

  @security @authentication
  Scenario: I cannot login if my API key has expired
    When I add "Content-Type" header equal to "application/json"
    When I send a POST request to "/login" with body:
    """
    {
        "username": "user2@test.com",
        "password": "someotherpassword"
    }
    """
    Then the response status code should be 401

  @security @authentication
  Scenario: I cannot authenticate if I am not a valid user
    When I add "Content-Type" header equal to "application/json"
    When I send a POST request to "/login" with body:
    """
    {
        "username": "user1@test.com",
        "password": "wrongpassword"
    }
    """
    Then the response status code should be 401

  @security @authentication
  Scenario: I can authenticate role anon
    Then I add "x-api-key" header equal to "7123456"
    When I send a GET request to "/zones"
    Then the response status code should be 200

  @security @authentication
  Scenario: I cannot authenticate if my API key has expired
    Then I add "x-api-key" header equal to "123456"
    When I send a GET request to "/secured_area"
    Then the response status code should be 401

  @security @authentication
  Scenario: I cannot authenticate if my API key has expired unless I am a staff user (based on email)
    Then I add "x-api-key" header equal to "891234"
    When I send a GET request to "/secured_area"
    Then the response status code should be 202

  @security @authentication
  Scenario: I should not be allowed on restricted areas if I don't provide a valid token
    Then I add "x-api-key" header equal to "invalidtoken"
    When I send a GET request to "/secured_area"
    Then the response status code should be 401

  @security @authentication
  Scenario: I should not be allowed on restricted areas if I don't provide a valid token, even if I just logged in using email/password
    When I add "Content-Type" header equal to "application/json"
    When I send a POST request to "/login" with body:
    """
    {
        "username": "user1@test.com",
        "password": "somepassword"
    }
    """
    Then the response status code should be 200
    And the response should be in JSON
    And the response should contain "apiKey"

    Then I add "x-api-key" header equal to "invalidtoken"
    When I send a GET request to "/secured_area"
    Then the response status code should be 401

#  @todo: uncomment once roles are synced in production and permissions are active.
#  @security @authorisation
#  Scenario: I should not be able to access the list of invoices if I am not part of the staff
#    Given I add "x-api-key" header equal to "apiKeyForAStaffRole"
#    When I send a GET request to "/invoices"
#    Then the response status code should be 200
#    Given I add "x-api-key" header equal to "abc123"
#    When I send a GET request to "/invoices"
#    Then the response status code should be 403
#
#  @security @authorisation
#  Scenario: I should not be able to access an invoice for an organisation I don't belong to
#    Given I add "x-api-key" header equal to "abc123"
#    When I send a GET request to "/invoices/eabacc78-622d-4857-a382-74d4f1a40fbb"
#    Then the response status code should be 200
#    Given I add "x-api-key" header equal to "abc123"
#    When I send a GET request to "/invoices/abbacd12-722d-9851-b382-84d4f1a40fab"
#    Then the response status code should be 403


# @todo: Remove line thereafter and uncomment code once we completely switch off tracks. For now, Tracks is still the source of truth.
#  @security
#  Scenario: If I am logged in, I should be able to log out (the API key will be expired)
#    When I add "Content-Type" header equal to "application/json"
#    When I send a POST request to "/login" with body:
#    """
#    {
#        "username": "user1@test.com",
#        "password": "somepassword"
#    }
#    """
#    Then the response status code should be 200
#    And I save my authentication token
#    And I add my saved authentication token to the header
#    When I send a GET request to "/secured_area"
#    Then the response status code should be 200
#    And I add my saved authentication token to the header
#    When I send a GET request to "/logout"
#    Then the response status code should be 200
#    And I add my saved authentication token to the header
#    When I send a GET request to "/secured_area"
#    Then the response status code should be 401

# @todo: Remove line thereafter and uncomment code once we completely switch off tracks. For now, Tracks is still the source of truth.
#  @security
#  Scenario: I cannot logout if I am not logged in
#    When I send a GET request to "/logout"
#    Then the response status code should be 401
