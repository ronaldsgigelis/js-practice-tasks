# JavaScript Animation Tasks

This folder contains JavaScript DOM animation and movement practice tasks.

The tasks focus on moving HTML elements with JavaScript, mouse events, keyboard events and CSS animations.

## Structure

```txt
animation_tasks/
├── README.md
├── index.php
├── style.css
├── uzd_1_burbuli.php
├── uzd_2_bumba.php
├── uzd_3_poga.php
├── uzd_4_varti.php
├── uzd_5_kvadrats.php
├── uzd_6_auto.php
├── uzd_7_lietus.php
├── uzd_8_saule-makoni.php
├── uzd_9_labirints.php
└── uzd_10_lekajoss-kvadrats.php
```

## Tasks

### Task 1 - Rising bubbles

Bubbles appear at the bottom of the area and slowly move upward. When a bubble leaves the screen, it is removed.

Main concepts:

- createElement()
- appendChild()
- setInterval()
- CSS animation
- remove()

### Task 2 - Falling and bouncing ball

A round div falls from the top and bounces several times before stopping.

Main concepts:

- requestAnimationFrame()
- gravity effect
- position update
- bounce logic

### Task 3 - Escaping button

A button moves to another position when the mouse gets close to it.

Main concepts:

- mouse event
- random position
- style.left
- style.top

### Task 4 - Opening gates

Two gate elements open to the sides after pressing a button. Another div element moves through the middle.

Main concepts:

- classList.add()
- CSS transitions
- transform
- button click

### Task 5 - Square follows mouse

A square moves together with the mouse cursor inside the selected area.

Main concepts:

- mousemove event
- getBoundingClientRect()
- style.left
- style.top

### Task 6 - Moving car

A car div moves from the left side of the screen to the right side and then starts again.

Main concepts:

- CSS keyframes
- animation
- classList.add()

### Task 7 - Rain drops

Multiple small div elements fall from the top like rain. Each drop appears in a random horizontal position.

Main concepts:

- createElement()
- Math.random()
- setInterval()
- CSS animation
- remove()

### Task 8 - Sun and cloud animation

A sky scene with a sun and a moving cloud. The cloud slowly moves across the screen.

Main concepts:

- CSS animation
- positioning
- pseudo-elements
- keyframes

### Task 9 - Maze game

A small player div is moved with keyboard arrow keys. The goal is to reach the finish without touching the walls.

Main concepts:

- keydown event
- player movement
- collision detection
- getBoundingClientRect()
- win condition

### Task 10 - Random jumping square

A square moves to a random position every second and can also change color.

Main concepts:

- setInterval()
- Math.random()
- style.left
- style.top
- random color selection

## Main concepts covered

- DOM manipulation
- createElement()
- appendChild()
- remove()
- setInterval()
- setTimeout()
- requestAnimationFrame()
- Math.random()
- keyboard events
- mouse events
- style.left
- style.top
- classList.add()
- CSS transitions
- CSS keyframes
- collision detection

## How to run

Run the folder through a local PHP server, for example XAMPP:

```txt
http://localhost/js-practice-tasks/animation_tasks/
```

## Notes

PHP is used to include separate task files into one page.

The animation logic is written with JavaScript and CSS.