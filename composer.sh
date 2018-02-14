#!/bin/bash
printf '\n\033[0;36mHi! This is a Docker container for Composer.
Arguments are run in composer + the pwd.\033[0m\n\n'
docker run --rm -v $(pwd):/app composer/composer $@
# docker run --interactive --tty --volume /Users/tim/ScoopM:/app composer install
printf "\n"