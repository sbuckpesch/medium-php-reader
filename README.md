# medium-php-reader
Easy SDK for reading Medium posts of a user by parsing mediums JSON feed.

## Getting Started

```
$medium = new Medium( '@sbuckpesch' );
$posts  = $medium->getPosts();
foreach ( $posts as $post ) {
    $data                 = $post->toArray();
    echo $post->getPreviewImage( 600 );
    echo date( 'd F Y', $post->getPublishedAt() / 1000 );
}
```

### Installing

Easiest way to add it to your project is by using composer.

```
composer require sbuckpesch/medium-php-reader
```

## Contributing

Please read [CONTRIBUTING.md] for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/sbuckpesch/medium-php-reader/tags).

## Authors

* **Sebastian Buckpesch** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md] file for details

## Acknowledgments

* Jason Matthew: https://medium.jasonmdesign.com/display-medium-articles-on-your-site-d772b3b05779
* Mark Fasel: https://medium.com/statuscode/building-a-basic-web-service-to-display-your-medium-blog-posts-on-your-website-using-aws-api-48597b1771c5