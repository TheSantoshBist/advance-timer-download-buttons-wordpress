let courseBtn = document.getElementById("course-btn");
let linkBtn = document.getElementById("get-link-btn");
let courseLink = document.getElementById("course-link");

let isTimerRunning = false;
let courseCountdown;
let linkCountdown;
let courseRemainingTime = 0;
let linkRemainingTime = 0;
let courseStartTime;
let linkStartTime;

function startCourseTimer() {
  if (isTimerRunning) return;

  courseBtn.removeAttribute("onclick");
  let count = courseRemainingTime > 0 ? courseRemainingTime : 10; // Set time as needed
  courseStartTime = Date.now();
  courseCountdown = setInterval(function() {
    let elapsed = Math.floor((Date.now() - courseStartTime) / 1000);
    let remaining = count - elapsed;
    courseBtn.innerHTML = `Getting link in ${remaining} seconds...`;
    if (remaining <= 0) {
      clearInterval(courseCountdown);
      linkBtn.classList.remove("hide");
      courseBtn.classList.add("hide");
      window.scrollTo({
        top: linkBtn.offsetTop - 300,
        behavior: 'smooth'
      });
      isTimerRunning = false;
    }
  }, 1000);
  isTimerRunning = true;
}

function startDlTimer() {
  if (isTimerRunning) return;

  let count = linkRemainingTime > 0 ? linkRemainingTime : 5; // Set time as needed
  linkStartTime = Date.now();
  linkCountdown = setInterval(function() {
    let elapsed = Math.floor((Date.now() - linkStartTime) / 1000);
    let remaining = count - elapsed;
    linkBtn.innerHTML = `Generating link... ${remaining}`;
    if (remaining <= 0) {
      clearInterval(linkCountdown);
      courseLink.classList.remove("hide");
      linkBtn.classList.add("hide");
      window.scrollTo({
        top: courseLink.offsetTop - 300,
        behavior: 'smooth'
      });
      isTimerRunning = false;
    }
  }, 1000);
  isTimerRunning = true;
}
