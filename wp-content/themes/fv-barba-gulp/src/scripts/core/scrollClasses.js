const scrollClasses = {

  getPageSection(mainClass, n, arr = []) {
    mainClass[n] ? arr.push(mainClass[n]) : null
    return n < 2 ? arr : this.getPageSection(mainClass, n - 1, arr)
  },

  addHiddenClasses(targetClasses, n) {
    targetClasses[n - 1].classList.add('scroll--hidden');
    targetClasses[n - 1].classList.add('scroll');
    n == 1 ? null : this.addHiddenClasses(targetClasses, n - 1);
  },

  removeHiddenClasses(targetClasses) {
    for (let i = 0; i < targetClasses.length; i++) {
      if (targetClasses[i]) {
        if (targetClasses[i].getBoundingClientRect().top < (screen.height / 2)) {
          targetClasses[i].classList.remove('scroll--hidden')
        }
      }
    }
  },

  enableScrollAnimation(targetSections, sectionsAmount) {
    let arr = this.getPageSection(targetSections, sectionsAmount);
    arr.push(elt('.footer'))
    this.addHiddenClasses(arr, arr.length)
    this.removeHiddenClasses(arr)
    window.addEventListener('scroll', () => this.removeHiddenClasses(arr))
  }

}