# [RAD](http://bytefair.github.com/rad) - A Toolbox for WordPress

## What is RAD?

Real Awesome Development (or RAD) is a framework for WordPress development that
makes developing totally custom sites simple by heavily exploiting action hooks
in all the parent theme code. An override in a template is as simple as removing
a hook and throwing another in its place.

It is inspired by the ideas expressed in the electronic book [Radical WordPress](http://radicalwordpress.com).
I was writing a lot of what I thought and believed about WordPress site
development and thought it seemed like a great idea to make a companion suite of
software to use in future sites. RAD is meant to be easily updatable and
extendable so as to always follow the best practices of website development and
WordPress capability.

## Why Should I Use a Parent Development Framework?

The primary answer here is reducing code duplication and making site maintenence
far easier. I'm not saying you should for sure use THIS one, but if you're
creating WP sites from scratch, a parent theme will save you a lot of heartache
in the future. Say we decided that our old viewport tag needs to be altered. If
we're using traditional WP themes, we have to edit those in every single site
that we've ever developed that we want to change. If we're using a parent
toolkit, then all we have to do is make one code change. Think of all the sites
you'd consider moving off of XHTML if it were as simple as changing one area of
code.

## General Development Principles

Everything in RAD is linked to theme hooks, so not only can you utilize all
these hooks yourself but you can override functionality by calling remove_action
on any hook and adding something to replace it.
