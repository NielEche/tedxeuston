var express = require("express");
var path = require("path");

var PORT = process.env.PORT || 8082;
var app = express();
app.use(express.static(__dirname));

app.get("/about", function(req, res) {
  res.sendFile(__dirname + "/about.html");
});

app.get("/careers", function(req, res) {
  res.sendFile(__dirname + "/careers.html");
});

app.get("/contact-us", function(req, res) {
  res.sendFile(__dirname + "/contact-us.html");
});

app.get("/get-in-touch", function(req, res) {
  res.sendFile(__dirname + "/get-in-touch.html");
});

app.get("/schedule", function(req, res) {
  res.sendFile(__dirname + "/schedule.html");
});

app.get("/services-one", function(req, res) {
  res.sendFile(__dirname + "/services-one.html");
});

app.get("/services-two", function(req, res) {
  res.sendFile(__dirname + "/services-two.html");
});

app.get("/speakers", function(req, res) {
  res.sendFile(__dirname + "/speakers.html");
});

app.get("/sponsors", function(req, res) {
  res.sendFile(__dirname + "/sponsors.html");
});

app.get("/venue", function(req, res) {
  res.sendFile(__dirname + "/venue.html");
});

app.get("/workshops", function(req, res) {
  res.sendFile(__dirname + "/workshops.html");
});

app.get("/home-red", function(req, res) {
  res.sendFile(__dirname + "/home-red.html");
});

app.get("/home-slider", function(req, res) {
  res.sendFile(__dirname + "/home-slider.html");
});

app.get("/home-dark", function(req, res) {
  res.sendFile(__dirname + "/home-dark.html");
});

app.get("/home-elegant", function(req, res) {
  res.sendFile(__dirname + "/home-elegant.html");
});

app.get("/home-countdown", function(req, res) {
  res.sendFile(__dirname + "/home-countdown.html");
});

app.get("/home-portfolio", function(req, res) {
  res.sendFile(__dirname + "/home-portfolio.html");
});

app.get("/blog", function(req, res) {
  res.sendFile(__dirname + "/blog.html");
});

app.get("post.html", function(req, res) {
  res.sendFile(__dirname + "/post.html");
});

app.get("page.html", function(req, res) {
  res.sendFile(__dirname + "/page.html");
});

app.get("/coming-soon", function(req, res) {
  res.sendFile(__dirname + "/coming-soon.html");
});

app.get("/case-studies", function(req, res) {
  res.sendFile(__dirname + "/case-studies.html");
});

app.get("/portfolio-align-right", function(req, res) {
  res.sendFile(__dirname + "/portfolio-align-right.html");
});

app.get("/portfolio-align-center", function(req, res) {
  res.sendFile(__dirname + "/portfolio-align-center.html");
});

app.get("/portfolio-align-left", function(req, res) {
  res.sendFile(__dirname + "/portfolio-align-left.html");
});

// Interactive
app.get("/interactive-speakers", function(req, res) {
  res.sendFile(__dirname + "/interactive-speakers.html");
});

app.get("/interactive-speakers-masonry", function(req, res) {
  res.sendFile(__dirname + "/interactive-speakers-masonry.html");
});

app.get("/interactive-speakers-grid", function(req, res) {
  res.sendFile(__dirname + "/interactive-speakers-grid.html");
});

app.get("/interactive-team-two-columns", function(req, res) {
  res.sendFile(__dirname + "/interactive-team-two-columns.html");
});

app.get("/interactive-team-three-columns", function(req, res) {
  res.sendFile(__dirname + "/interactive-team-three-columns.html");
});

app.get("/interactive-instructors", function(req, res) {
  res.sendFile(__dirname + "/interactive-instructors.html");
});

app.get("/interactive-call-to-action", function(req, res) {
  res.sendFile(__dirname + "/interactive-call-to-action.html");
});

app.get("/interactive-features", function(req, res) {
  res.sendFile(__dirname + "/interactive-features.html");
});

app.get("/interactive-wildcard", function(req, res) {
  res.sendFile(__dirname + "/interactive-wildcard.html");
});

app.get("/interactive-schedule", function(req, res) {
  res.sendFile(__dirname + "/interactive-schedule.html");
});

app.get("/interactive-video-button", function(req, res) {
  res.sendFile(__dirname + "/interactive-video-button.html");
});

app.get("/interactive-testimonials", function(req, res) {
  res.sendFile(__dirname + "/interactive-testimonials.html");
});

app.get("/interactive-posts-list", function(req, res) {
  res.sendFile(__dirname + "/interactive-posts-list.html");
});

app.get("/interactive-mailchimp", function(req, res) {
  res.sendFile(__dirname + "/interactive-mailchimp.html");
});

app.get("/interactive-links", function(req, res) {
  res.sendFile(__dirname + "/interactive-links.html");
});

// Services
app.get("/services-list", function(req, res) {
  res.sendFile(__dirname + "/services-list.html");
});

app.get("/services-text", function(req, res) {
  res.sendFile(__dirname + "/services-text.html");
});

app.get("/services-icon", function(req, res) {
  res.sendFile(__dirname + "/services-icon.html");
});

app.get("/services-image", function(req, res) {
  res.sendFile(__dirname + "/services-image.html");
});

// Layouts
app.get("/layouts-accordion", function(req, res) {
  res.sendFile(__dirname + "/layouts-accordion.html");
});

app.get("/layouts-tabs", function(req, res) {
  res.sendFile(__dirname + "/layouts-tabs.html");
});

app.get("/layouts-buttons", function(req, res) {
  res.sendFile(__dirname + "/layouts-buttons.html");
});

app.get("/layouts-contact-form", function(req, res) {
  res.sendFile(__dirname + "/layouts-contact-form.html");
});

app.get("/layouts-sponsors", function(req, res) {
  res.sendFile(__dirname + "/layouts-sponsors.html");
});

app.get("/layouts-image-gallery", function(req, res) {
  res.sendFile(__dirname + "/layouts-image-gallery.html");
});

app.get("/layouts-carousel", function(req, res) {
  res.sendFile(__dirname + "/layouts-carousel.html");
});

app.get("/layouts-google-map", function(req, res) {
  res.sendFile(__dirname + "/layouts-google-map.html");
});

// Infographics
app.get("/infographics-countdown", function(req, res) {
  res.sendFile(__dirname + "/infographics-countdown.html");
});

app.get("/infographics-pricing", function(req, res) {
  res.sendFile(__dirname + "/infographics-pricing.html");
});

app.get("/infographics-progress-bars", function(req, res) {
  res.sendFile(__dirname + "/infographics-progress-bars.html");
});

app.get("/infographics-icon-lists", function(req, res) {
  res.sendFile(__dirname + "/infographics-icon-lists.html");
});

app.get("/infographics-alerts", function(req, res) {
  res.sendFile(__dirname + "/infographics-alerts.html");
});

// Typography
app.get("/typography-headings", function(req, res) {
  res.sendFile(__dirname + "/typography-headings.html");
});

app.get("/typography-columns", function(req, res) {
  res.sendFile(__dirname + "/typography-columns.html");
});

app.get("/typography-blockquote", function(req, res) {
  res.sendFile(__dirname + "/typography-blockquote.html");
});

app.get("/typography-dropcaps", function(req, res) {
  res.sendFile(__dirname + "/typography-dropcaps.html");
});

app.get("/typography-highlights", function(req, res) {
  res.sendFile(__dirname + "/typography-highlights.html");
});

app.get("*", function(req, res) {
  res.sendFile(__dirname + "/404.html");
});

app.listen(PORT, function(err, res) {
  console.log("Server listens to port " + PORT + "...");
});
