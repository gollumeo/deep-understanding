# Module: BasicORM

## Purpose
Rebuild a minimal ORM system to understand how objects are mapped to relational tables without relying on Laravel's Eloquent or Doctrine. The focus is on understanding active record vs data mapper patterns, hydration, and query abstraction.

## Target Features (MVP)
- Define entities with properties mapped to DB columns
- Basic CRUD operations (create, find, update, delete)
- Hydrate objects from raw array data
- Persist objects back to storage

## Technical Constraints
- No use of PDO ORM wrappers or existing ORMs
- No dependency on a specific DB driver (mocking allowed)
- Focus on structure and abstraction, not raw SQL generation
- Fully test-driven

## Why this module?
To deeply understand:
- Object-relational mapping strategies
- Difference between Active Record and Data Mapper
- Hydration vs persistence logic
- Clean separation between entities and infrastructure

## Potential Enhancements (Post-MVP)
- Relationship handling (hasOne, hasMany)
- Query builder abstraction
- Soft deletes
- Event hooks (beforeSave, afterUpdate, etc.)

## Status
> Planned
