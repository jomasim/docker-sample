FROM python:3-alpine
WORKDIR /product
COPY . /product
RUN pip install -r requirements.txt
CMD ["python", "api.py"]