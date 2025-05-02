# Deep Understanding

A personal lab to rebuild and deeply understand backend primitives — without frameworks, without shortcuts.

Using a framework is great.  
Understanding its mechanics is better.  
**Deeply mastering how each piece is built is the real game.**

Each module is fully isolated, tested, and documented:

- `Router/` — HTTP routing from scratch
- `EventBus/` — Synchronous event dispatch system
- `ListenerDispatcher/` — Listener resolution and execution
- `CookieAuth/` — Stateless cookie-based authentication
- `CommandBus/` — CQRS-style command dispatching
- `SimpleContainer/` — Manual dependency injection
- `FilesystemWrapper/` — Safe file operations abstraction
- `Logger/` — Minimal logging engine
- `BasicORM/` — Object-relational mapping core
- `Dispatching/` – Basic dispatching system
- `Stream/` – Streamable data flow

Each folder contains:

- A `README.md` explaining design goals and constraints
- A TDD-first implementation
- A deep focus on concept over code

> This is not a framework.  
> This is a forge.
