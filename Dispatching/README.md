# Module: Dispatching

## Purpose

Simulate how a backend framework executes a matched controller action.  
This module decouples routing logic from execution logic, ensuring clear responsibility separation and testability.

## Target Features (MVP)

- Accept a callable `[Controller::class, 'method']`
- Invoke the method and return its result
- Validate the callable structure
- Throw clear exceptions if invalid or uncallable

## Technical Constraints

- No framework
- Pure PHP
- Callable validation logic included
- Delegated dispatching (not handled inside the router)

## Why this module?

To understand:

- The final step of a typical request lifecycle
- How frameworks “call” your controller methods
- The importance of separating routing from execution
- How to validate and securely execute application logic

## Potential Enhancements

- Dependency injection before dispatch
- Parameter auto-resolution
- Return-type enforcement
- Response shaping (raw, JSON, etc.)

## Status

> In progress
