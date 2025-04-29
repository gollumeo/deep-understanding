# Module: CommandBus

## Purpose
Create a basic command bus to separate write operations (commands) from query logic. Inspired by CQRS and Laravel's command bus.

## Target Features (MVP)
- Register commands and handlers
- Dispatch command to its handler
- Enforce contracts (Command + Handler)

## Technical Constraints
- PHP only
- Fully test-driven
- Strictly typed interfaces

## Why this module?
To understand:
- CQRS principles
- Separation of write responsibilities
- Handler resolution and execution

## Potential Enhancements (Post-MVP)
- Command middleware pipeline
- Async command queue (mocked)
- Retry strategies

## Status
> Planned
