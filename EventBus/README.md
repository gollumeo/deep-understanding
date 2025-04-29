# Module: EventBus

## Purpose
Build a minimal event bus system to publish and propagate events across decoupled parts of the application. Inspired by Laravel events but without any black-box behavior.

## Target Features (MVP)
- Register event-to-listener bindings
- Dispatch events synchronously
- Handle multiple listeners per event
- Base Event and Listener contracts

## Technical Constraints
- No external dependencies
- Interface-based design
- Synchronous only for MVP
- Fully test-driven

## Why this module?
To understand:
- Pub/Sub architecture
- Event propagation mechanics
- Listener orchestration
- Decoupling via events

## Potential Enhancements (Post-MVP)
- Async event handling
- Listener priorities
- Queued listeners (simulated)
- Wildcard event binding

## Status
> Planned
