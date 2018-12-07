# Docker SAML 2.0 Test-Setup 

This setup uses [SimpleSAMLphp](https://simplesamlphp.org/) to provide a SAML 2.0 IdP and SP running in separate docker containers. Various configuration options can be set through environment variabels without the need to rebuild the images.

---

**Warning!**: Do not use this setup in production! The containers are not configured for security and use static credentials and keys

---

## Build

Make sure `docker` and `docker-compose` are installed on your system. To build the images, run `docker-compose build`. To start the containers, run `docker-compose up`. You can then access the SP on `http://localhost:8180/simplesaml/index.php`. The IdP is made available at `http://localhost:8080/simplesampl/index.php`. There is an `admin` account on both the IdP and the SP, the password for which
is `secret`. Furthermore, two testuser accounts are preconfigured on the Idp as `user1:user1pass` and `user2:user2pass`

## Example

If we want to make the SP issue signed Authentication Requests using the HTTP-POST binding and the IdP should sign and encrypt assertions while not signing the Response, we could use the following environment variables before starting the containers:

```
export REQ_BINDING='HTTP-POST' SIGN_REQ=true SIGN_RESP=false ENCRYPT_ASSERTION=true SIGN_ASSERTION=true
docker-compose up
```

## License

This project is heavily based on https://github.com/kristophjunge/docker-test-saml-idp and https://github.com/chrisUsick/docker-test-saml-sp and is therefore lincensed under the MIT license by Kristoph Junge.
