import {
  ICreateProductForm,
  IUpdateProductForm
} from '../../services/product/productService.types';
import ProductService from '../../services/product/product.service';

export const createProductMutation = {
  key: ['createProduct'],
  mutation: async (payload: ICreateProductForm): Promise<null> => {
    return await ProductService.createProduct(payload);
  }
};

export const updateProductMutation = {
  key: ['updateProduct'],
  mutation: async (payload: IUpdateProductForm): Promise<null> => {
    return await ProductService.updateProduct(payload);
  }
};

export const deleteProductMutation = {
  key: ['deleteProduct'],
  mutation: async (id: number): Promise<null> => {
    return await ProductService.deleteProduct(id);
  }
};
