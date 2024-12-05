"use client"

import Image from "next/image"
import { useCart } from "@/context/cart-context"
import { Minus, Plus, Trash2 } from "lucide-react"

export default function CartPage() {
  const { items, updateQuantity, removeItem } = useCart()

  const subtotal = items.reduce((total, item) => total + item.price * item.quantity, 0)
  const shipping = 15 // Fixed shipping cost
  const total = subtotal + shipping

  if (items.length === 0) {
    return (
      <div className="min-h-screen bg-black flex items-center justify-center">
        <div className="text-center space-y-4">
          <h2 className="text-2xl font-bold text-white">Your cart is empty</h2>
          <p className="text-gray-400">Add some beautiful artworks to your cart!</p>
        </div>
      </div>
    )
  }

  return (
    <div className="min-h-screen bg-black">
      <div className="container mx-auto px-4 py-20">
        <h1 className="text-4xl font-bold text-white mb-8">Shopping Cart</h1>
        
        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8">
          {/* Cart Items */}
          <div className="lg:col-span-2 space-y-4">
            {items.map((item) => (
              <div
                key={item.id}
                className="bg-gradient-to-r from-gray-900 to-black p-4 rounded-lg flex gap-4"
              >
                {/* Item Image */}
                <div className="relative w-24 h-24 rounded-lg overflow-hidden">
                  <Image
                    src={item.imageUrl}
                    alt={item.title}
                    fill
                    className="object-cover"
                  />
                </div>

                {/* Item Details */}
                <div className="flex-1 flex flex-col justify-between">
                  <div>
                    <h3 className="text-lg font-semibold text-white">{item.title}</h3>
                    <p className="text-gray-400">${item.price.toFixed(2)}</p>
                  </div>

                  {/* Quantity Controls */}
                  <div className="flex items-center gap-4">
                    <div className="flex items-center bg-gray-900 rounded-lg">
                      <button
                        onClick={() => updateQuantity(item.id, Math.max(1, item.quantity - 1))}
                        className="p-2 text-gray-400 hover:text-white"
                      >
                        <Minus className="w-4 h-4" />
                      </button>
                      <span className="px-4 text-white">{item.quantity}</span>
                      <button
                        onClick={() => updateQuantity(item.id, item.quantity + 1)}
                        className="p-2 text-gray-400 hover:text-white"
                      >
                        <Plus className="w-4 h-4" />
                      </button>
                    </div>
                    <button
                      onClick={() => removeItem(item.id)}
                      className="p-2 text-red-500 hover:text-red-400"
                    >
                      <Trash2 className="w-4 h-4" />
                    </button>
                  </div>
                </div>

                {/* Item Total */}
                <div className="text-right">
                  <p className="text-lg font-semibold text-white">
                    ${(item.price * item.quantity).toFixed(2)}
                  </p>
                </div>
              </div>
            ))}
          </div>

          {/* Order Summary */}
          <div className="bg-gradient-to-b from-gray-900 to-black p-6 rounded-lg h-fit">
            <h2 className="text-xl font-bold text-white mb-6">Order Summary</h2>
            
            <div className="space-y-4">
              <div className="flex justify-between text-gray-400">
                <span>Subtotal</span>
                <span>${subtotal.toFixed(2)}</span>
              </div>
              <div className="flex justify-between text-gray-400">
                <span>Shipping</span>
                <span>${shipping.toFixed(2)}</span>
              </div>
              <div className="border-t border-gray-800 pt-4">
                <div className="flex justify-between text-white font-semibold">
                  <span>Total</span>
                  <span>${total.toFixed(2)}</span>
                </div>
              </div>
            </div>

            <button className="w-full mt-6 bg-gradient-to-r from-purple-900 to-blue-900 text-white font-semibold py-3 rounded-lg hover:from-purple-800 hover:to-blue-800">
              Proceed to Checkout
            </button>
          </div>
        </div>
      </div>
    </div>
  )
}
