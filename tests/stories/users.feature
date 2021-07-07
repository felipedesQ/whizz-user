Feature: Users request

  @user-get
  Scenario: I can get user information using uuid
    When I send a GET request to "/users/af75eac3-949a-4f79-bf8a-b2d961d37427"
    Then the response status code should be 200
    And the response should be in JSON
    And the response should be equal to
    """
    {"id":"3907","uuid":"bf75eac3-949a-4f75-bf8a-b2d961d37428","status":1,"createdAt":"2021-07-06T08:55:32+00:00","modifiedAt":"2021-07-06T08:55:32+00:00","email":"dev@whizz.com","salt":"777d6e541f5b1568f79d24574d252888","password":"p@ssword1","plainPassword":null,"lastLogin":null,"confirmationToken":null,"passwordRequestedAt":null,"firstName":"Jane","lastName":"Doe","phone":null,"apiKey":"67dbb8ae11f3de399558a2ec66d244bc","apiKeyExpiresAt":"2120-01-24T03:14:09+00:00"}
    """
