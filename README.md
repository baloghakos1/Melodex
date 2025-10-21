# Melodex
♪ Music without limits ♪

| URL          | HTTP method | Auth | JSON Response     |
| ------------ | ----------- | ---- | ----------------- |
| /user/login  | POST        |      | user's token      |
| /users       | GET         | Y    | all users         |
| /songs       | GET         |      | all songs         |
| /song        | POST        | Y    | new song added    |
| /song/{id}   | PATCH       | Y    | edited song       |
| /song/{id}   | DELETE      | Y    | id                |
| /artists     | GET         |      | all artists       |
| /artist      | POST        | Y    | new artist added  |
| /artist/{id} | PATCH       | Y    | edited artist     |
| /artist/{id} | DELETE      | Y    | id                |
| /members     | GET         |      | all members       |
| /member      | POST        | Y    | new member added  |
| /member/{id} | PATCH       | Y    | edited member     |
| /member/{id} | DELETE      | Y    | id                |
| /albums      | GET         |      | all albums        |
| /album       | POST        | Y    | new album added   |
| /album/{id}  | PATCH       | Y    | edited album      |
| /album/{id}  | DELETE      | Y    | id                |
