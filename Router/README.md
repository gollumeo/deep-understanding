# Module: Router

## Purpose
Understand and implement the foundations of an HTTP router from scratch, without any framework or third-party packages. The design is inspired by Laravel but built with Clean Architecture and strict separation of concerns.

## Target Features (MVP)
- Register routes per HTTP verb
- Dispatch to [Class, method] or automatically to __invoke
- Reject closures (to avoid embedding business logic)
- (Optional) Middleware chain support

## Technical Constraints
- No external dependencies
- Pure PHP
- Interface-driven abstractions
- TDD only

## Why this module?
To deeply understand:
- Route registration and matching
- HTTP method handling
- Request dispatching
- Middleware lifecycle (if implemented)

## Potential Enhancements (Post-MVP)
- URI parameters (e.g. /users/{id})
- Route naming
- Route groups / prefixes
- Conditional routes (e.g. role-based access)

## Status
> In Progress
