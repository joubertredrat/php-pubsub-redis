# PHP Pubsub Redis

A small test with PHP and Redis as pubsub.

#### Dependencies

* Docker
* Docker compose

#### Run

To run, execute command below:

```bash
docker-compose up
```

After this, all projects will run and publish random meow facts

#### Publish Message

If you want to test with your message, open other terminal and run command below:

```bash
./publish.sh "your message"
```

After this you will see your message received by subscribers.


#### References

* https://redis.io/topics/pubsub
* https://www.youtube.com/watch?v=-KH5w-cUdhw
* https://github.com/nrk/predis
