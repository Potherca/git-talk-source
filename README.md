# git-talk-source

The source-code for my "Beyond everyday git" talk.

## R̶E̶A̶D̶M̶E̶ TODO

This repository was hacked together quickly, so I could create a reveal.js
slideshow with each (set of) slides being a separate file.

There was no README, no documentation and not much logic to it all.

Now I want to start using this functionality more often, it will need to be
cleanup up.

The first thing that struck me is "Why the hell did I use PHP?".

Obviously the server-side logic should be implemented in Node. The project even
has a `pakcages.js`, for crying out loud!

It might (also?) be better suited to NOT be done server-side and create a client
side implementation that can then be released as a reveal.js plugin.

Anyway. This file contains all of the things that I think need to happen to make
this project usable and maintainable.

## 1. Documentation

Write down what this project is supposed to do, how it is supposed to work,
which problems it aims to solve and what it is NOT meant for.

The major focal point should be: How the hell do you use this thing?

## 2. Code cleanup

1. Create a separate repo for just the logic
2. Separate the actual logic from the content
3. Release the logic as a package
4. Update this repo to use the package
5. Migrate from PHP to NodeJS
6. Create a client-side versions
7. Release as reveal plugin

Alternatively, as the "logic" is _very_ basic (concat & filter) I could just
make versions for each language I know and deploy packages for all of them...

(So: Ruby, PHP, NodeJs, BASH, Python, Go, Java)

