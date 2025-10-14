# Melodex
♪ Music without limits ♪

| URL          | HTTP method | Auth | JSON Response     |
| ------------ | ----------- | ---- | ----------------- |
| /user/login  | POST        |      | user's token      |
| /users       | GET         | Y    | all users         |
| /songs       | GET         |      | all songs         |
| /song        | POST        | Y    | new song added    |
| /song        | PATCH       | Y    | edited song       |
| /song        | DELETE      | Y    | id                |
