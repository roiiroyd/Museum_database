###
jQuery Lighter
Copyright 2015 Kevin Sylvestre
1.3.4
###

"use strict"

$ = jQuery

class Animation

  @transitions:
    "webkitTransition": "webkitTransitionEnd"
    "mozTransition": "mozTransitionEnd"
    "oTransition": "oTransitionEnd"
    "transition": "transitionend"

  @transition: ($el) ->
    for el in $el
      return result for type, result of @transitions when el.style[type]?

  @execute: ($el, callback) ->
    transition = @transition($el)
    if transition? then $el.one(transition, callback) else callback()

class Slide

  constructor: (url) ->
    @url = url

  type: ->
    switch
      when @url.match(/\.(webp|jpeg|jpg|jpe|gif|png|bmp)$/i) then 'image'
      else 'unknown'

  preload: (callback) ->
    image = new Image()
    image.src = @url
    image.onload = =>
      @dimensions =
        width: image.width
        height: image.height
      callback(@)

  $content: ->
    $("<img />").attr(src: @url)

class Lighter
  @namespace: "lighter"

  defaults:
    loading: '#{Lighter.namespace}-loading'
    fetched: '#{Lighter.namespace}-fetched'
    padding: 40
    dimensions:
      width:  480
      height: 480
    template:
      """
      <div class='#{Lighter.namespace} #{Lighter.namespace}-fade'>
        <div class='#{Lighter.namespace}-container'>
          <span class='#{Lighter.namespace}-content'></span>
          <a class='#{Lighter.namespace}-close'>&times;</a>
          <a class='#{Lighter.namespace}-prev'>&lsaquo;</a>
          <a class='#{Lighter.namespace}-next'>&rsaquo;</a>
        </div>
        <div class='#{Lighter.namespace}-spinner'>
          <div class='#{Lighter.namespace}-dot'></div>
          <div class='#{Lighter.namespace}-dot'></div>
          <div class='#{Lighter.namespace}-dot'></div>
        </div>
        <div class='#{Lighter.namespace}-overlay'></div>
      </div>
      """

  @lighter: ($target, options = {}) ->
    data = $target.data('_lighter')
    $target.data('_lighter', data = new Lighter($target, options)) unless data
    return data

  $: (selector) =>
    @$el.find(selector)

  constructor: ($target, settings = {}) ->
    @$target = $target

    @settings = $.extend {}, @defaults, settings

    @$el = $(@settings.template)

    @$overlay = @$(".#{Lighter.namespace}-overlay")
    @$content = @$(".#{Lighter.namespace}-content")
    @$container = @$(".#{Lighter.namespace}-container")
    @$close = @$(".#{Lighter.namespace}-close")
    @$prev = @$(".#{Lighter.namespace}-prev")
    @$next = @$(".#{Lighter.namespace}-next")
    @$body = @$(".#{Lighter.namespace}-body")

    @dimensions = @settings.dimensions

    @process()

  close: (event) =>
    event?.preventDefault()
    event?.stopPropagation()
    @hide()

  next: (event) =>
    event?.preventDefault()
    event?.stopPropagation()
    # TODO

  prev: =>
    event?.preventDefault()
    event?.stopPropagation()
    # TODO

  type: (href = @href()) =>
    @settings.type or ("image" if @href().match(/\.(webp|jpeg|jpg|jpe|gif|png|bmp)$/i))

  resize: (dimensions) =>
    @dimensions = dimensions
    @align()

  process: =>
    fetched = =>
      @$el.removeClass("#{Lighter.namespace}-loading").addClass("#{Lighter.namespace}-fetched")

    loading = =>
      @$el.removeClass("#{Lighter.namespace}-fetched").addClass("#{Lighter.namespace}-loading")

    @slide = new Slide(@$target.attr("href"))

    loading()
    @slide.preload (slide) =>
      @resize(slide.dimensions)
      @$content.html(@slide.$content())
      fetched()

  align: =>
    size = @size()

    @$container.css
      width: size.width
      height: size.height
      margin: "-#{size.height / 2}px -#{size.width / 2}px"

  size: =>
    ratio = Math.max (@dimensions.height / ($(window).height() - @settings.padding)) , (@dimensions.width / ($(window).width()  - @settings.padding))
    width:  if ratio > 1.0 then Math.round(@dimensions.width  / ratio) else @dimensions.width
    height: if ratio > 1.0 then Math.round(@dimensions.height / ratio) else @dimensions.height

  keyup: (event) =>
    return if event.target.form?
    @close() if event.which is 27 # esc
    @prev() if event.which is 37 # l-arrow
    @next() if event.which is 39 # r-arrow

  observe: (method = 'on') =>
    $(window)[method] "resize", @align
    $(document)[method] "keyup", @keyup
    @$overlay[method] "click", @close
    @$close[method] "click", @close
    @$next[method] "click", @next
    @$prev[method] "click", @prev

  hide: =>
    alpha = => @observe('off')
    omega = => @$el.remove()

    alpha()
    @$el.position()
    @$el.addClass("#{Lighter.namespace}-fade")
    Animation.execute(@$el, omega)

  show: =>
    omega = => @observe('on')
    alpha = => $(document.body).append @$el

    alpha()
    @$el.position()
    @$el.removeClass("#{Lighter.namespace}-fade")
    Animation.execute(@$el, omega)

$.fn.extend
  lighter: (option = {}) ->
    @each ->
      $this = $(@)

      options = $.extend {}, $.fn.lighter.defaults, typeof option is "object" and option
      action = if typeof option is "string" then option else option.action
      action ?= "show"

      Lighter.lighter($this, options)[action]()

$(document).on "click", "[data-lighter]", (event) ->
  event.preventDefault()
  event.stopPropagation()

  $(this).lighter()
