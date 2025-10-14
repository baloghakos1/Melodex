# Melodex
♪ Music without limits ♪

| URL          | HTTP method | Auth | JSON Response     |
| ------------ | ----------- | ---- | ----------------- |
| /users/login | POST        |      | user's token      |
| /users       | GET         | Y    | all users         |
| /songs       | GET         |      | all songs         |
| /songs       | POST        | Y    | new song added    |
| /songs       | PATCH       | Y    | edited song       |
| /songs       | DELETE      | Y    | id                |
