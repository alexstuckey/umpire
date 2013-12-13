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

### Photos
#### Methods
* List
* Upload
* Approve
* Disapprove
* Delete
* Get

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
