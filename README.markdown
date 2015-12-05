FOSUserBundle
=============
Fork from FOSUserBundle - changes include

- Removed other storage apart from ORM (doctrine 2)
- Removed constraints from User (username and email) - Implemented differently by extension.
- Added support in user provider for subdomain checks against a user.
- For this to work you must implement a getUserByEmailAndSubdomain in the UserRepository if using subdomain provider
- Tested & working with PHP7

For more information on implementation please refer to the FOSUSERBUNDLE docs.
