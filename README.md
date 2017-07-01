# IM Night 2016 Site
inspired by [http://www.carce.cc/goodcar](http://www.carce.cc/goodcar), this site should make it feel as if it were thrown together in 2 hours (which it was), by someone stuck in the turn of the century (I was barely born back then!)

## Static site gen using Hugo
Theme is "track"

## Usage

Create new posts with `hugo new post/post-name.md`
* posts are in `content`
* this command fills in the basic headers needed
* static stuff should be put into `static`
    * paths used in content should start with `/night/2017/`

When ready to publish, run `hugo`
* This will take generate the pages and put them into `public`
* `public` is linked to `ntu.im/night/2017`
* post order can be decided by `weight` at the top of each post
