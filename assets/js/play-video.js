document.addEventListener("DOMContentLoaded", function () {
  const playButton = document.getElementById("play-button");
  const thumbnail = document.getElementById("video-thumbnail");
  const videoWrapper = document.getElementById("video-wrapper");
  const iframe = document.getElementById("custom-video");

  playButton.addEventListener("click", function () {
    // Show the iframe and hide the thumbnail
    videoWrapper.classList.remove("hidden");
    thumbnail.style.display = "none";

    // Start playing the video
    iframe.src += "&autoplay=1";
  });
});
