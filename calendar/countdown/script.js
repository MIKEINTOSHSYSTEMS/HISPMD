class Countdown {
  constructor(el){
    this.el = el;
    this.targetDate = new Date(el.getAttribute("date-time"));
    this.createCountDownParts()
    this.countdownFunction();
    this.countdownLoopId = setInterval(this.countdownFunction.bind(this), 1000)
  }
  createCountDownParts(){
    ["days", "hours", "minutes", "seconds"].forEach(part => {
      const partEl = document.createElement("div");
      partEl.classList.add("part", part);
      const textEl = document.createElement("div");
      textEl.classList.add("text");
      textEl.innerText = part;
      const numberEl = document.createElement("div");
      numberEl.classList.add("number");
      numberEl.innerText = 0;
      partEl.append(numberEl, textEl);
      this.el.append(partEl);
      this[part] = numberEl;
    })
  }

  countdownFunction(){
    const currentDate = new Date();    
    if(currentDate > this.targetDate) return clearInterval(this.intervalId);
    const remaining = this.getRemaining(this.targetDate, currentDate);
    Object.entries(remaining).forEach(([part,value]) => {
      this[part].style.setProperty("--value", value)
      this[part].innerText = value
    })  
  }
  
  getRemaining(target, now){
    let seconds = Math.floor((target - (now))/1000);
    let minutes = Math.floor(seconds/60);
    let hours = Math.floor(minutes/60);
    let days = Math.floor(hours/24);
    hours = hours-(days*24);
    minutes = minutes-(days*24*60)-(hours*60);
    seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);
    return { days, hours, minutes, seconds }      
  }

}

const countdownEls= document.querySelectorAll(".countdown") || [];
countdownEls.forEach(countdownEl => new Countdown(countdownEl))