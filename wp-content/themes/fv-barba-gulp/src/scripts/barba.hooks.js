barba.init({
  sync: true,
  transitions: [
    {
      async leave() {
        const pageLoaderLine = new TimelineMax()
          .add(() => {
            headerStateChange('remove')
          })
          .fromTo('.page-loader', { transformOrigin: 'left bottom', opacity: 1, scaleY: 0, scaleX: 1 }, { duration: .4, ease: Power1.easeInOut, scaleY: 1 })
        await delay(700)
        return true
      },

      async enter() {
        await delay(100)
        const pageLoaderLine = new TimelineMax()
          .fromTo('.page-loader', { transformOrigin: 'left top', opacity: 1, scaleY: 1, scaleX: 1 }, { duration: .7, ease: Power1.easeInOut, scaleX: 1, scaleY: 0 })
      },

      async once() {
        await delay(300)
        const pageLoaderLine = new TimelineMax()
          .to('body', { duration: .1, opacity: 1 })
          .to('.page-loader', { duration: .7, ease: Power1.easeInOut, scaleX: 1 })
          .to('.site-content', { duration: .1, opacity: 1 })
          .to('.page-loader', { duration: 1, delay: .4, ease: Power1.easeInOut, scaleY: 0 })
          .fromTo('.header', { opacity: 0, y: -100 }, { duration: .7, opacity: 1, y: 0 }, '-=.25')
          .fromTo('.header__container', { opacity: 0 }, { duration: 1, opacity: 1 })
      }
    }
  ],
  views: [
    Homepage, Products
  ]
})
