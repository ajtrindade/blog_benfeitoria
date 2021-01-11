FROM vue_laravel_ineertia-jetstream
LABEL version="1.0.0" description="uso de laravel vue inertia e jetstream" maintainer="Antonio Trindade<ajtrindade@gmail.com>"
RUN cd / && mkdir bkpblog && chmod 777 -R bkpblog/
COPY ./blog /blog
VOLUME /bkpblog/
EXPOSE 80
ENV API_BANCO=blog
WORKDIR /blogs/resources/
ENTRYPOINT ["/blogs"]
CMD ["-g", "daemon off;"]