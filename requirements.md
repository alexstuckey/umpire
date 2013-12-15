# Requirements

* Provice access to data through
  1. HTML interface
  2. JSON-REST API
* Allow photos to be view, then approved/disapproved
* Send broadcast to all registered users (via push notification)
* Display Twitter feed (perhaps through an aggregate feed via the server)

## Objects

### Events
#### Methods
* List
* Create
* Delete
* Change
* Star
* Get

#### Properties
| Name         | Type    |
| -------------|---------|
| id           | int     |
| name         | text    |
| description  | text    |
| location     | text    |
| date_start   | date    |
| date_end     | date    |
| type         | text    |

### Photos
#### Methods
* List
* Upload
* Approve
* Disapprove
* Delete
* Get

#### Properties
| Name         | Type    |
| -------------|---------|
| id           | int     |
| url          | text    |
| uploader     | int     |
| date_uploaded| date    |
| status       | text    |

### Users
#### Methods
* Register
* List
* Get

#### Properties

| Name        | Type    |
| ------------|---------|
| name        | text    |
| email       | email   |
| device      | text    |
| app_version | text    |
| ios_version | text    |
| admin       | BOOL    |
| house       | text    |
| year        | text    |
| registered  | date    |
